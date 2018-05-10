package com.example.naush.gait;


import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;

public class Register extends AppCompatActivity implements View.OnClickListener {
    private Button buttonRegitster;
    private EditText editTextEmail;
    private EditText editTextPassword;
    private TextView textViewSignin;

    private ProgressDialog progressDialog;
    private FirebaseAuth firebaseAuth;

    @Override
    protected void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login);
        firebaseAuth=FirebaseAuth.getInstance();
        if(firebaseAuth.getCurrentUser()!=null)
        {
            startActivity(new Intent(this,MainActivity.class));
        }

        buttonRegitster=(Button)findViewById(R.id.buttonRegister);
        editTextEmail=(EditText)findViewById(R.id.editTextEmail);
        editTextPassword=(EditText)findViewById(R.id.editTextPassword);
        textViewSignin=(TextView)findViewById(R.id.textViewSignin);
        progressDialog=new ProgressDialog(this);


       buttonRegitster.setOnClickListener(this);
       textViewSignin.setOnClickListener(this);

    }
    private void registerUser()
    {
        String email=editTextEmail.getText().toString().trim();
        String password=editTextPassword.getText().toString().trim();

        if(TextUtils.isEmpty(email)){
            //mail is empty
            Toast.makeText(this,"please enter your email",Toast.LENGTH_SHORT).show();
            return;
        }
        if(TextUtils.isEmpty(password))
        {
            //password is empty
            Toast.makeText(this,"please enter your password",Toast.LENGTH_SHORT).show();
            return;
        }
        progressDialog.setMessage("Registering User....");
        progressDialog.show();

        firebaseAuth.createUserWithEmailAndPassword(email,password).addOnCompleteListener(this, new OnCompleteListener<AuthResult>() {
            @Override
            public void onComplete(@NonNull Task<AuthResult> task) {
                if(task.isSuccessful())
                {
                    Toast.makeText(Register.this, "You have Registered Successfully", Toast.LENGTH_SHORT).show();
                    progressDialog.dismiss();
                    finish();
                    startActivity(new Intent(getApplicationContext(),StaticData.class));




                }
                else
                {
                    Toast.makeText(Register.this, "Failed to Register", Toast.LENGTH_SHORT).show();
                    progressDialog.dismiss();

                }
            }
        });

    }


    @Override
    public void onClick(View view)
    {
        if(view==buttonRegitster)
        {
            registerUser();
        }
        if(view==textViewSignin)
        {
            //loginActivity();
            startActivity(new Intent(this,LoginActivity.class));

        }
    }

}
