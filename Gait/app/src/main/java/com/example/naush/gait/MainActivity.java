package com.example.naush.gait;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v4.app.FragmentTransaction;
import android.view.View;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.support.v4.app.Fragment;
import android.widget.TextView;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;


public class MainActivity extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener {
    private FirebaseAuth firebaseAuth;
    ProgressDialog progressDialog;
    private String data_email,data_age,data_name,data_height,data_weight,data_gender;
    private String data_acc_ankle,data_acc_thigh,data_acc_trunk;
    private String data_gyr_ankle,data_gyr_thigh,data_gyr_trunk,data_pedo;
    private DatabaseReference databaseReference;
    private String email,uid;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
//        setSupportActionBar(toolbar);
        progressDialog=new ProgressDialog(this);

        firebaseAuth= FirebaseAuth.getInstance();
        if(firebaseAuth.getCurrentUser()==null)
        {
            finish();
            startActivity(new Intent(this, LoginActivity.class));
        }
        FirebaseUser user=firebaseAuth.getCurrentUser();
        databaseReference= FirebaseDatabase.getInstance().getReference("Users");

        email=firebaseAuth.getCurrentUser().getEmail();

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

                        data_acc_ankle=register_staticData.acc_ankle.trim();
                        data_acc_thigh=register_staticData.acc_thigh.trim();
                        data_acc_trunk=register_staticData.acc_trunk.trim();

                        data_gyr_ankle=register_staticData.gyr_ankle.trim();
                        data_gyr_thigh=register_staticData.gyr_thigh.trim();
                        data_gyr_trunk=register_staticData.gyr_trunk.trim();

                        data_pedo=register_staticData.pedo.trim();



                        //Toast.makeText(getActivity(),uid,Toast.LENGTH_LONG).show();
                        //start.setEnabled(true);
                        progressDialog.dismiss();
                        break;
                    }



                }
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
        });




        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
                this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.setDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);

        View hView =  navigationView.getHeaderView(0);
        TextView nav_user = (TextView)hView.findViewById(R.id.name);
        nav_user.setText(data_name);
        TextView nav_user_email = (TextView)hView.findViewById(R.id.email);
        nav_user_email.setText(user.getEmail());

        Fragment frag1=null;
        frag1 = new HomeFragment();
        FragmentTransaction ft = getSupportFragmentManager().beginTransaction();
        ft.replace(R.id.content_frame, frag1);
        ft.commit();
    }

    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();
        Fragment fragment=null;

        if (id == R.id.accelerometer) {
            // Handle the camera action
            fragment = new Accelerometer();
            FragmentTransaction ft = getSupportFragmentManager().beginTransaction();
            ft.replace(R.id.content_frame, fragment);
            ft.commit();
        } else if (id == R.id.gyroscope) {
            fragment = new Gyroscope();
            FragmentTransaction ft = getSupportFragmentManager().beginTransaction();
            ft.replace(R.id.content_frame, fragment);
            ft.commit();

        } else if (id == R.id.home) {
            fragment = new HomeFragment();
            FragmentTransaction ft = getSupportFragmentManager().beginTransaction();
            ft.replace(R.id.content_frame, fragment);
            ft.commit();

        }
        else if (id == R.id.stepcounter) {
            fragment = new Stepcounter();
            FragmentTransaction ft = getSupportFragmentManager().beginTransaction();
            ft.replace(R.id.content_frame, fragment);
            ft.commit();

        }
        else if(id==R.id.history)
        {
            fragment = new History();
            FragmentTransaction ft = getSupportFragmentManager().beginTransaction();
            ft.replace(R.id.content_frame, fragment);
            ft.commit();
        }
        else if(id==R.id.logout)
        {
            firebaseAuth.signOut();
            finish();
            startActivity(new Intent(this, LoginActivity.class));
        }

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }
}
