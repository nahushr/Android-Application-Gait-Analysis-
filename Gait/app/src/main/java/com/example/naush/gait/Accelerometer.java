package com.example.naush.gait;

import android.app.Activity;
import android.app.ProgressDialog;
import android.content.Context;
import android.graphics.Color;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.os.Environment;
import android.os.Handler;
import android.os.SystemClock;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Chronometer;
import android.widget.ListView;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;
import com.jjoe64.graphview.GraphView;
import com.jjoe64.graphview.helper.StaticLabelsFormatter;
import com.jjoe64.graphview.series.DataPoint;
import com.jjoe64.graphview.series.LineGraphSeries;

import java.io.File;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Random;

public class Accelerometer extends Fragment implements SensorEventListener {

    private final Handler mHandler = new Handler();
    private Runnable mTimer1;
    private Runnable mTimer2;
    private Runnable mTimer3;

    private LineGraphSeries<DataPoint> mSeries1;
    private LineGraphSeries<DataPoint> mSeries2;
    private LineGraphSeries<DataPoint> mSeries3;

    private double graph1LastXValue = 5d;
    private double graph2LastXValue = 5d;
    private double graph3LastXValue = 5d;

    private SensorManager senSensorManager;
    private Sensor senAccelerometer;
    private long lastUpdate = 0;
    private float last_x, last_y, last_z;
    private static final int SHAKE_THRESHOLD = 600;
    long curTime=0;
    float x,y,z;
    private Spinner spinner1;
    public static String spinner_select="";


    Button start,stop;

    float curTime_arr[]=new float[3000];
    float x_arr[]=new float[3000];
    float y_arr[]=new float[3000];
    float z_arr[]=new float[3000];
    int counter=0;
    private DatabaseReference databaseReference;
    private FirebaseAuth firebaseAuth;
    String email;
    private String data="";
    private String uid;
    //long startTime=0;
    Date startDate;

    private String data_email,data_age,data_name,data_height,data_weight,data_gender;
    private String data_acc_ankle,data_acc_thigh,data_acc_trunk;
    private String data_gyr_ankle,data_gyr_thigh,data_gyr_trunk,data_pedo;
    Chronometer cmTimer;
    Boolean resume = false;
    long elapsedTime;
    String TAG = "TAG";
    ProgressDialog progressDialog;
    Spinner spinnerDropDownView;
    String[] spinnerValueHoldValue = {"Ankle", "Thigh", "Trunk"};





    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.fragment_gyroscope, container, false);
        cmTimer = (Chronometer) rootView.findViewById(R.id.cmTimer);



        progressDialog=new ProgressDialog(getContext());


       //first find the registered user in the database via its email and then get the registration key for that retreieve all the data and find the matching email id
        firebaseAuth=FirebaseAuth.getInstance();
        email=firebaseAuth.getCurrentUser().getEmail();
        databaseReference=FirebaseDatabase.getInstance().getReference("Users");








        start=(Button)rootView.findViewById(R.id.start);
        stop=(Button)rootView.findViewById(R.id.stop);
        //spinner1 = (Spinner) rootView.findViewById(R.id.spinner1);
        spinnerDropDownView =(Spinner)rootView.findViewById(R.id.spinner1);
        ArrayAdapter<String> adapter = new ArrayAdapter<>(getActivity(), android.R.layout.simple_list_item_1, spinnerValueHoldValue);
        spinnerDropDownView.setAdapter(adapter);

        spinnerDropDownView.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {

            @Override
            public void onItemSelected(AdapterView<?> parent, View view,
                                       int position, long id) {

                spinner_select=spinnerDropDownView.getSelectedItem().toString();
                Toast.makeText(getContext(), spinnerDropDownView.getSelectedItem().toString(), Toast.LENGTH_LONG).show();

            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {
                // TODO Auto-generated method stub

            }
        });




        start.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                senSensorManager = (SensorManager) getActivity().getSystemService(Context.SENSOR_SERVICE);
                senAccelerometer = senSensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER);
//                senSensorManager.registerListener(Accelerometer.this, senAccelerometer , SensorManager.SENSOR_DELAY_NORMAL);

                startDate = new Date();
                if (!resume) {
                    cmTimer.setBase(SystemClock.elapsedRealtime());
                    cmTimer.start();
                } else {
                    cmTimer.start();
                }



                senSensorManager.registerListener(Accelerometer.this, senAccelerometer, SensorManager.SENSOR_DELAY_NORMAL);


                mTimer1 = new Runnable() {
                    @Override
                    public void run() {
                        graph1LastXValue += 1d;
                        mSeries1.appendData(new DataPoint(graph1LastXValue, x), true, 4000);
                        mHandler.postDelayed(this, 200);
                    }
                };
                mHandler.postDelayed(mTimer1, 4000);

                mTimer2 = new Runnable() {
                    @Override
                    public void run() {
                        graph2LastXValue += 1d;
                        mSeries2.appendData(new DataPoint(graph2LastXValue, y), true, 4000);
                        mHandler.postDelayed(this, 200);
                    }
                };
                mHandler.postDelayed(mTimer2, 4000);

                mTimer3 = new Runnable() {
                    @Override
                    public void run() {
                        graph3LastXValue += 1d;
                        mSeries3.appendData(new DataPoint(graph3LastXValue, z), true, 4000);
                        mHandler.postDelayed(this, 200);
                    }
                };
                mHandler.postDelayed(mTimer3, 4000);

            }
        });

        stop.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {
                senSensorManager.unregisterListener(Accelerometer.this);
                cmTimer.setBase(SystemClock.elapsedRealtime());
                cmTimer.stop();
                cmTimer.setText("");
                resume = true;

                for(int i=0;i<counter;i++)
                {
                    data+=curTime_arr[i]+","+x_arr[i] + "," + y_arr[i] + "," + z_arr[i]+"::";
                }
                if(spinner_select.trim()=="Ankle")
                {
                    start.setEnabled(false);
                    progressDialog.setMessage("Updating Data.....");
                    progressDialog.show();
                    data_acc_ankle=data;
                    databaseReference=FirebaseDatabase.getInstance().getReference();
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
                                    start.setEnabled(true);
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
                if(spinner_select.trim()=="Thigh")
                {
                    start.setEnabled(false);
                    progressDialog.setMessage("Updating Data.....");
                    progressDialog.show();
                    data_acc_thigh=data;
                    databaseReference=FirebaseDatabase.getInstance().getReference();
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
                                    start.setEnabled(true);
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
                if(spinner_select.trim()=="Trunk")
                {
                    start.setEnabled(false);
                    progressDialog.setMessage("Updating Data.....");
                    progressDialog.show();
                    data_acc_trunk=data;
                    databaseReference=FirebaseDatabase.getInstance().getReference();
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
                                    start.setEnabled(true);
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



                   // databaseReference.child("Data").child(uid).setValue(user);



            }
        });



        GraphView graph1 = (GraphView) rootView.findViewById(R.id.graph1);
        mSeries1 = new LineGraphSeries<>();
        graph1.addSeries(mSeries1);
        graph1.getViewport().setXAxisBoundsManual(true);
        graph1.getViewport().setMinX(0);
        graph1.getViewport().setMaxX(40);

        graph1.getViewport().setMinY(-10);
        graph1.getViewport().setMaxY(10);

        graph1.getViewport().setScalable(false);
        graph1.getViewport().setScalableY(false);
        graph1.getViewport().setYAxisBoundsManual(true);
        graph1.getViewport().setXAxisBoundsManual(true);

        graph1.setTitle("Acceleration in x-direction");
        graph1.setTitleTextSize(50f);
        graph1.setTitleColor(Color.RED);




        GraphView graph2 = (GraphView) rootView.findViewById(R.id.graph2);
        mSeries2 = new LineGraphSeries<>();
        graph2.addSeries(mSeries2);
        graph2.getViewport().setXAxisBoundsManual(true);
        graph2.getViewport().setMinX(0);
        graph2.getViewport().setMaxX(40);

        graph2.getViewport().setMinY(-10);
        graph2.getViewport().setMaxY(10);

        graph2.getViewport().setScalable(false);
        graph2.getViewport().setScalableY(false);
        graph2.getViewport().setYAxisBoundsManual(true);
        graph2.getViewport().setXAxisBoundsManual(true);

        graph2.setTitle("Acceleration in y-direction");
        graph2.setTitleTextSize(50f);
        graph2.setTitleColor(Color.RED);;

        GraphView graph3 = (GraphView) rootView.findViewById(R.id.graph3);
        mSeries3 = new LineGraphSeries<>();
        graph3.addSeries(mSeries3);
        graph3.getViewport().setXAxisBoundsManual(true);
        graph3.getViewport().setMinX(0);
        graph3.getViewport().setMaxX(40);

        graph3.getViewport().setMinY(-10);
        graph3.getViewport().setMaxY(10);

        graph3.getViewport().setScalable(false);
        graph3.getViewport().setScalableY(false);
        graph3.getViewport().setYAxisBoundsManual(true);
        graph3.getViewport().setXAxisBoundsManual(true);

        graph3.setTitle("Acceleration in z-direction");
        graph3.setTitleTextSize(50f);
        graph3.setTitleColor(Color.RED);

        return rootView;
    }

    @Override
    public void onSensorChanged(SensorEvent event) {
        Sensor mySensor = event.sensor;
       // Toast.makeText(getContext(),"on sensor changed started",Toast.LENGTH_LONG).show();

        if (mySensor.getType() == Sensor.TYPE_ACCELEROMETER) {
            x = event.values[0];
            y = event.values[1];
            z = event.values[2];


            //curTime =startDate.getTime();
            if (!resume) {
                long minutes = ((SystemClock.elapsedRealtime() - cmTimer.getBase())/1000) / 60;
                long seconds = ((SystemClock.elapsedRealtime() - cmTimer.getBase())/1000) % 60;
                elapsedTime = SystemClock.elapsedRealtime();
                long elapsedMillis = SystemClock.elapsedRealtime() - cmTimer.getBase();


                Log.d(TAG, "onChronometerTick: " + elapsedMillis);

                x_arr[counter]=x;
                y_arr[counter]=y;
                z_arr[counter]=z;
                curTime_arr[counter]=elapsedMillis;
                counter++;
                //Log.d(TAG, "onChronometerTick2: " + millis);


            } else {
                long minutes = ((elapsedTime - cmTimer.getBase())/1000) / 60;
                long seconds = ((elapsedTime - cmTimer.getBase())/1000) % 60;
                elapsedTime = elapsedTime + 1000;
                elapsedTime = SystemClock.elapsedRealtime();
                long elapsedMillis = SystemClock.elapsedRealtime() - cmTimer.getBase();
                Log.d(TAG, "onChronometerTick: " + elapsedMillis);
            }



            //data+=curTime+","+x + "," + y + "," + z+"::";






//            if ((curTime - lastUpdate) > 100) {
//                long diffTime = (curTime - lastUpdate);
//                lastUpdate = curTime;
//
//                float speed = Math.abs(x + y + z - last_x - last_y - last_z)/ diffTime * 10000;
//
//                if (speed > SHAKE_THRESHOLD) {
//
//                }
//
//                last_x = x;
//                last_y = y;
//                last_z = z;
//            }
        }
    }

    @Override
    public void onAccuracyChanged(Sensor sensor, int accuracy) {

    }


    @Override
    public void onResume() {
        super.onResume();

    }

    @Override
    public void onPause() {

        super.onPause();


    }
    @Override
    public void onStart()
    {
        super.onStart();
        start.setEnabled(false);
        progressDialog.setMessage("Fetching Data plz wait.....");
        progressDialog.show();
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
                        start.setEnabled(true);
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