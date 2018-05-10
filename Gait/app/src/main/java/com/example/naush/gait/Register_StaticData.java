package com.example.naush.gait;

public class Register_StaticData {

    public String name,age,height,weight,email,gender;
    public String acc_ankle,acc_thigh,acc_trunk;
    public String gyr_ankle,gyr_thigh,gyr_trunk;
    public String pedo;



    public Register_StaticData() {
        // Default constructor required for calls to DataSnapshot.getValue(User.class)
    }

    public Register_StaticData(String gender,String name, String age, String height, String weight,String email, String acc_ankle, String acc_thigh, String acc_trunk, String gyr_ankle, String gyr_thigh, String gyr_trunk, String pedo) {
        this.gender=gender;
        this.name=name;
        this.age=age;
        this.height=height;
        this.weight=weight;
        this.email=email;
        this.acc_ankle=acc_ankle;
        this.acc_thigh=acc_thigh;
        this.acc_trunk=acc_trunk;
        this.gyr_ankle=gyr_ankle;
        this.gyr_thigh=gyr_thigh;
        this.gyr_trunk=gyr_trunk;
        this.pedo=pedo;

    }
    public String getName()
    {
        return name;
    }
    public String getEmail()
    {
         return email;
    }

}