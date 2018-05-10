package com.example.naush.gait;

public class Register_patient_history {

  public String acc_ankle,acc_thigh,acc_trunk;
  public String gyr_ankle,gyr_fore,gyr_lateral;
  public String pedo;



    public Register_patient_history() {
        // Default constructor required for calls to DataSnapshot.getValue(User.class)
    }

    public Register_patient_history(String acc_ankle, String acc_thigh, String acc_trunk, String gyr_ankle, String gyr_fore, String gyr_lateral, String pedo) {

        this.acc_ankle=acc_ankle;
        this.acc_thigh=acc_thigh;
        this.acc_trunk=acc_trunk;

        this.gyr_ankle=gyr_ankle;
        this.gyr_fore=gyr_fore;
        this.gyr_lateral=gyr_lateral;

        this.pedo=pedo;
    }

    public String getAcc_ankle() {
        return acc_ankle;
    }

    public String getAcc_thigh() {
        return acc_thigh;
    }

    public String getAcc_trunk() {
        return acc_trunk;
    }

    public String getGyr_ankle() {
        return gyr_ankle;
    }

    public String getGyr_fore() {
        return gyr_fore;
    }

    public String getGyr_lateral() {
        return gyr_lateral;
    }

    public String getPedo() {
        return pedo;
    }
}