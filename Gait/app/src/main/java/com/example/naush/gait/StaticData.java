package com.example.naush.gait;

import android.app.ProgressDialog;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

import java.text.SimpleDateFormat;
import java.util.Date;

public class StaticData extends AppCompatActivity {

    EditText name,height,weight,age,gender;
    Button register_staticdata;
    FirebaseAuth firebaseAuth;
    private DatabaseReference databaseReference;
    ProgressDialog progressDialog;
    public static String uid;

    String str_name,str_height,str_weight,str_age,str_gender;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_static_data);
        progressDialog=new ProgressDialog(this);

        firebaseAuth= FirebaseAuth.getInstance();
        if(firebaseAuth.getCurrentUser()==null)
        {
            finish();
            startActivity(new Intent(this, LoginActivity.class));
        }
        databaseReference= FirebaseDatabase.getInstance().getReference();
        FirebaseUser user=firebaseAuth.getCurrentUser();

        name=(EditText)findViewById(R.id.name);
        height=(EditText)findViewById(R.id.height);
        weight=(EditText)findViewById(R.id.weight);
        age=(EditText)findViewById(R.id.age);
        gender=(EditText)findViewById(R.id.gender);

        register_staticdata=(Button)findViewById(R.id.register);



        register_staticdata.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String str_email=firebaseAuth.getCurrentUser().getEmail();
                str_name=name.getText().toString().trim();
                str_height=height.getText().toString().trim();
                str_weight=weight.getText().toString().trim();
                str_age=age.getText().toString().trim();
                str_gender=gender.getText().toString().trim();
               // Toast.makeText(getApplicationContext(),str_name+str_height+str_weight+str_age,Toast.LENGTH_SHORT).show();

                progressDialog.setMessage("Saving Data.....");
                progressDialog.show();
                Register_StaticData obj=new Register_StaticData(str_gender,str_name,str_age,str_height,str_weight,str_email,"","","","","","","");
                FirebaseUser user=firebaseAuth.getCurrentUser();
                uid=user.getUid();
                databaseReference.child("Users").child(uid).setValue(obj);


                Register_patient_history obj2=new Register_patient_history("","","","","","","");
                uid=user.getUid();

                Date date = new Date();
                SimpleDateFormat formatter = new SimpleDateFormat("dd/MM/yyyy");
                String strDate= formatter.format(date);
                strDate=strDate.replace("/","_");
                databaseReference.child("History").child(uid).child(strDate).setValue(obj2);

                Toast.makeText(getApplicationContext(),"Data saved Successfully",Toast.LENGTH_SHORT).show();
                progressDialog.dismiss();
                //String data="data::::;;;;,,,32423,dv,f,sf,,sdf,";
                //databaseReference.child("Users").child(uid).push().setValue(data);

                finish();
                startActivity(new Intent(getApplicationContext(),MainActivity.class));

            }

        });


    }
}
