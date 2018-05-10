package com.example.naush.gait;

import com.google.firebase.database.Exclude;

import java.util.HashMap;
import java.util.Map;

public class Patient_acc_info {

    public String name,height,weight,age,email,gender;
    public int starCount = 0;
    public String acc_ankle,acc_thigh,acc_trunk;
    public String gyr_ankle,gyr_thigh,gyr_trunk;
    public String pedo;
    public Map<String, Boolean> stars = new HashMap<>();



    public Patient_acc_info() {
        // Default constructor required for calls to DataSnapshot.getValue(User.class)
    }

    public Patient_acc_info(String acc_ankle, String acc_thigh, String acc_trunk, String gyr_ankle, String gyr_thigh, String gyr_trunk, String pedo, String name, String email,String age, String weight, String height,String gender) {;
        this.name=name;
        this.email=email;
        this.age=age;
        this.weight=weight;
        this.height=height;
        this.gender=gender;
        this.acc_ankle=acc_ankle;
        this.acc_thigh=acc_thigh;
        this.acc_trunk=acc_trunk;
        this.gyr_ankle=gyr_ankle;
        this.gyr_thigh=gyr_thigh;
        this.gyr_trunk=gyr_trunk;
        this.pedo=pedo;


    }
    @Exclude
    public Map<String, Object> toMap() {
        HashMap<String, Object> result = new HashMap<>();
        result.put("gender",gender);
        result.put("height", height);
        result.put("weight", weight);
        result.put("age", age);
        result.put("name", name);
        result.put("email", email);
        result.put("acc_ankle",acc_ankle);
        result.put("acc_thigh",acc_thigh);
        result.put("acc_trunk",acc_trunk);
        result.put("gyr_ankle",gyr_ankle);
        result.put("gyr_thigh",gyr_thigh);
        result.put("gyr_trunk",gyr_trunk);
        result.put("pedo",pedo);




        return result;
    }

}