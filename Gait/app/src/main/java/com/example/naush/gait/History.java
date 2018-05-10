package com.example.naush.gait;

import android.app.ProgressDialog;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.os.Bundle;
import android.support.v7.widget.DefaultItemAnimator;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.sql.Array;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Date;
import java.util.Iterator;
import java.util.LinkedList;
import java.util.List;

public class History extends Fragment {
    private List<Movie> movieList = new ArrayList<>();
    private RecyclerView recyclerView;
    private MoviesAdapter mAdapter;
    private String data_email,data_age,data_name,data_height,data_weight,data_gender;
    private String data_acc_ankle,data_acc_thigh,data_acc_trunk;
    private String data_gyr_ankle,data_gyr_thigh,data_gyr_trunk,data_pedo;
    ProgressDialog progressDialog;
    FirebaseAuth firebaseAuth;
    private String email,uid;
    DatabaseReference databaseReference;

    private LinkedList data_acc_ankle_ll,data_acc_thigh_ll,data_acc_trunk_ll;
    private LinkedList data_gyr_ankle_ll,data_gyr_fore_ll,data_gyr_lateral_ll,data_pedo_ll;
    private LinkedList data_date_ll;
    ArrayList subscriptionInfo;
    private LinkedList date_final;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_history,
                container, false);
        subscriptionInfo = new ArrayList<>();
        data_date_ll=new LinkedList();
        data_acc_ankle_ll=new LinkedList();
        data_acc_thigh_ll=new LinkedList();
        data_acc_trunk_ll=new LinkedList();

        data_gyr_ankle_ll=new LinkedList();
        data_gyr_fore_ll=new LinkedList();
        data_gyr_lateral_ll=new LinkedList();

        data_pedo_ll=new LinkedList();

        date_final=new LinkedList();


        //first find the registered user in the database via its email and then get the registration key for that retreieve all the data and find the matching email id
        progressDialog=new ProgressDialog(getContext());

        firebaseAuth= FirebaseAuth.getInstance();
        email=firebaseAuth.getCurrentUser().getEmail();
        uid=firebaseAuth.getCurrentUser().getUid();
        databaseReference= FirebaseDatabase.getInstance().getReference("History");
        recyclerView = (RecyclerView) view.findViewById(R.id.recycler_view);

        mAdapter = new MoviesAdapter(movieList);
        RecyclerView.LayoutManager mLayoutManager = new LinearLayoutManager(getContext());
        recyclerView.setLayoutManager(mLayoutManager);
        recyclerView.setItemAnimator(new DefaultItemAnimator());
        recyclerView.setAdapter(mAdapter);

        return view;
    }
    @Override
    public void onViewCreated(View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);
        //you can set the title for your toolbar here for different fragments different titles
        getActivity().setTitle("Menu home");
    }
    private void prepareMovieData() {
        Date[] arr=new Date[data_date_ll.size()];

        for(int x=0;x<data_date_ll.size();x++)
        {
            String temp=data_date_ll.get(x).toString().replace("_","/");
            try {
                Date date1 = new SimpleDateFormat("dd/MM/yyyy").parse(temp);
                arr[x]=date1;

            }
            catch (Exception e)
            {
                e.printStackTrace();
            }

        }
        Arrays.sort(arr);
        for(int x=0;x<arr.length;x++)
        {
            date_final.add(arr[x]);
        }

       for(int x=0;x<data_date_ll.size();x++)
       {
           Log.d("letsroll2",date_final.get(x).toString().trim());
           Log.d("letsroll2",data_acc_ankle_ll.get(x).toString().trim());
           Log.d("letsroll2",data_acc_thigh_ll.get(x).toString().trim());
           Log.d("letsroll2",data_acc_trunk_ll.get(x).toString().trim());
           Log.d("letsroll2",data_gyr_ankle_ll.get(x).toString().trim());
           Log.d("letsroll2",data_gyr_fore_ll.get(x).toString().trim());
           Log.d("letsroll2",data_gyr_lateral_ll.get(x).toString().trim());
           Log.d("letsroll2",data_pedo_ll.get(x).toString().trim());
           Movie movie = new Movie(date_final.get(x).toString().trim(),
                   data_acc_ankle_ll.get(x).toString().trim(),
                   data_acc_thigh_ll.get(x).toString().trim(),
                   data_acc_trunk_ll.get(x).toString().trim(),
                   data_gyr_ankle_ll.get(x).toString().trim(),
                   data_gyr_fore_ll.get(x).toString().trim(),
                   data_gyr_lateral_ll.get(x).toString().trim(),
                   data_pedo_ll.get(x).toString().trim());
           movieList.add(movie);
       }



        mAdapter.notifyDataSetChanged();
    }
    @Override
    public void onStart()
    {
        super.onStart();
        progressDialog.setMessage("Fetching Data plz wait.....");
        progressDialog.show();
        databaseReference.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {


                for(DataSnapshot usersnapshot: dataSnapshot.getChildren())
                {

                    if(uid.equalsIgnoreCase(usersnapshot.getKey()))
                    {
                        for(DataSnapshot usersnapshot2: usersnapshot.getChildren()) {
                        Register_patient_history register_patient_history = usersnapshot2.getValue(Register_patient_history.class);



                                data_date_ll.add(usersnapshot2.getKey());
                                data_acc_ankle_ll.add(register_patient_history.acc_ankle.trim());
                                data_acc_thigh_ll.add(register_patient_history.acc_thigh.trim());
                                data_acc_trunk_ll.add(register_patient_history.acc_trunk.trim());

                                data_gyr_ankle_ll.add(register_patient_history.gyr_ankle.trim());
                                data_gyr_fore_ll.add(register_patient_history.gyr_fore.trim());
                                data_gyr_lateral_ll.add(register_patient_history.gyr_lateral.trim());

                                data_pedo_ll.add(register_patient_history.pedo.trim());
                                progressDialog.dismiss();
                                prepareMovieData();

                        }

                    }

                }
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }

        });
    }

}
