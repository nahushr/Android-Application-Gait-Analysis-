package com.example.naush.gait;

import android.app.ProgressDialog;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.os.SystemClock;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.Chronometer;
import android.widget.TextView;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.Date;
import java.util.HashMap;
import java.util.Map;

import static android.content.Context.SENSOR_SERVICE;

public class Stepcounter extends Fragment implements SensorEventListener, StepListener {
    private TextView textView;
    private StepDetector simpleStepDetector;
    private SensorManager sensorManager;
    private Sensor accel;
    private static final String TEXT_NUM_STEPS = "Number of Steps: ";
    private int numSteps;
    private TextView TvSteps;
    private Button BtnStart,BtnStop;
    private DatabaseReference databaseReference;
    private String data_email,data_age,data_name,data_height,data_weight,data_gender;
    private String data_acc_ankle,data_acc_thigh,data_acc_trunk;
    private String data_gyr_ankle,data_gyr_thigh,data_gyr_trunk,data_pedo;
    private String uid;
    String email;
    private FirebaseAuth firebaseAuth;
    private long elapsedTime;

    Chronometer cmTimer;
    Boolean resume = false;
    private TextView text;
    ProgressDialog progressDialog;


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_stepcounter,
                container, false);
        sensorManager = (SensorManager) getActivity().getSystemService(SENSOR_SERVICE);
        accel = sensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER);
        simpleStepDetector = new StepDetector();
        simpleStepDetector.registerListener(this);
        progressDialog=new ProgressDialog(getContext());


        cmTimer = (Chronometer) view.findViewById(R.id.cmTimer);


        TvSteps = (TextView) view.findViewById(R.id.tv_steps);
        BtnStart = (Button) view.findViewById(R.id.btn_start);
        //BtnStop = (Button) view.findViewById(R.id.btn_stop);
        text=(TextView)view.findViewById(R.id.text);
        firebaseAuth= FirebaseAuth.getInstance();
        email=firebaseAuth.getCurrentUser().getEmail();
        databaseReference=FirebaseDatabase.getInstance().getReference("Users");



        BtnStart.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View arg0) {

                numSteps = 0;
                sensorManager.registerListener(Stepcounter.this, accel, SensorManager.SENSOR_DELAY_FASTEST);
                if (!resume) {
                    cmTimer.setBase(SystemClock.elapsedRealtime());
                    cmTimer.start();
                } else {
                    cmTimer.start();
                }

            }
        });



        return view;
    }
    @Override
    public void onViewCreated(View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
        //you can set the title for your toolbar here for different fragments different titles
        getActivity().setTitle("Menu home");

    }
    @Override
    public void onAccuracyChanged(Sensor sensor, int accuracy) {
    }

    @Override
    public void onSensorChanged(SensorEvent event) {
        if (event.sensor.getType() == Sensor.TYPE_ACCELEROMETER) {
            simpleStepDetector.updateAccel(
                    event.timestamp, event.values[0], event.values[1], event.values[2]);

            long elapsedMillis;
            if (!resume) {

                elapsedTime = SystemClock.elapsedRealtime();
                elapsedMillis = SystemClock.elapsedRealtime() - cmTimer.getBase();


            } else {

                elapsedTime = elapsedTime + 1000;
                elapsedTime = SystemClock.elapsedRealtime();
                elapsedMillis = SystemClock.elapsedRealtime() - cmTimer.getBase();

            }
            if(elapsedMillis>60000)
            {
                progressDialog.show();
                progressDialog.setMessage("Saving Data... ");
                text.setText("Time elapsed....");
                sensorManager.unregisterListener(Stepcounter.this);
                databaseReference= FirebaseDatabase.getInstance().getReference();
                Patient_acc_info user = new Patient_acc_info(data_acc_ankle,data_acc_thigh,data_acc_trunk,data_gyr_ankle,data_gyr_thigh,data_gyr_trunk,data_pedo,data_name,data_email,data_age,data_weight,data_height,data_gender);
                Map<String, Object> postValues = user.toMap();

                Map<String, Object> childUpdates = new HashMap<>();
                childUpdates.put("/Users/" + uid, postValues);
                //childUpdates.put("/user-posts/" + userId + "/" + key, postValues);

                databaseReference.updateChildren(childUpdates);
                databaseReference.addValueEventListener(new ValueEventListener() {
                    @Override
                    public void onDataChange(DataSnapshot dataSnapshot) {


                        for(DataSnapshot usersnapshot: dataSnapshot.getChildren())
                        {
                            Register_StaticData register_staticData=usersnapshot.getValue(Register_StaticData.class);
                            if(email.equals(register_staticData.email.trim()))
                            {
                                //match found bingo get uid of the node

                                uid=usersnapshot.getKey();
                                data_email=register_staticData.email.trim();
                                data_name=register_staticData.name.trim();
                                data_age=register_staticData.age.trim();
                                data_height=register_staticData.height.trim();
                                data_weight=register_staticData.weight.trim();
                                data_gender=register_staticData.gender.trim();

                                data_acc_ankle=register_staticData.acc_ankle.trim();
                                data_acc_thigh=register_staticData.acc_thigh.trim();
                                data_acc_trunk=register_staticData.acc_trunk.trim();

                                data_gyr_ankle=register_staticData.gyr_ankle.trim();
                                data_gyr_thigh=register_staticData.gyr_thigh.trim();
                                data_gyr_trunk=register_staticData.gyr_trunk.trim();

                                data_pedo=register_staticData.pedo.trim();



                                //Toast.makeText(getActivity(),uid,Toast.LENGTH_LONG).show();
                                BtnStart.setEnabled(true);
                                progressDialog.dismiss();
                                break;
                            }



                        }
                    }

                    @Override
                    public void onCancelled(DatabaseError databaseError) {

                    }
                });
            }
        }
    }

    @Override
    public void step(long timeNs) {
        numSteps++;
        data_pedo=Integer.toString(numSteps);
        TvSteps.setText(TEXT_NUM_STEPS + numSteps);
    }
    @Override
    public void onStart()
    {
        super.onStart();
        databaseReference.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {


                for(DataSnapshot usersnapshot: dataSnapshot.getChildren())
                {
                    Register_StaticData register_staticData=usersnapshot.getValue(Register_StaticData.class);
                    if(email.equals(register_staticData.email.trim()))
                    {
                        //match found bingo get uid of the node

                        uid=usersnapshot.getKey();
                        data_email=register_staticData.email.trim();
                        data_name=register_staticData.name.trim();
                        data_age=register_staticData.age.trim();
                        data_height=register_staticData.height.trim();
                        data_weight=register_staticData.weight.trim();
                        data_gender=register_staticData.gender.trim();

                        data_acc_ankle=register_staticData.acc_ankle.trim();
                        data_acc_thigh=register_staticData.acc_thigh.trim();
                        data_acc_trunk=register_staticData.acc_trunk.trim();

                        data_gyr_ankle=register_staticData.gyr_ankle.trim();
                        data_gyr_thigh=register_staticData.gyr_thigh.trim();
                        data_gyr_trunk=register_staticData.gyr_trunk.trim();

                        data_pedo=register_staticData.pedo.trim();



                        //Toast.makeText(getActivity(),uid,Toast.LENGTH_LONG).show();
                        BtnStart.setEnabled(true);
                        break;
                    }



                }
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
        });
    }
}