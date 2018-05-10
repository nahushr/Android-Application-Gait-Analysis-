package com.example.naush.gait;

public class Movie {
    private String date,acc_ankle,acc_thigh,acc_trunk;
    private String gyr_ankle,gyr_fore,gyr_lateral,pedometer;

    public Movie() {
    }

    public Movie(String date, String acc_ankle, String acc_thigh, String acc_trunk, String gyr_ankle, String gyr_fore, String gyr_lateral, String pedometer) {
        this.date = date;
        this.acc_ankle = acc_ankle;
        this.acc_thigh = acc_thigh;
        this.acc_trunk = acc_trunk;

        this.gyr_ankle = gyr_ankle;
        this.gyr_fore = gyr_fore;
        this.gyr_lateral = gyr_lateral;

        this.pedometer=pedometer;
    }

    public String getGyr_lateral() {
        return gyr_lateral;
    }

    public String getGyr_ankle() {
        return gyr_ankle;
    }

    public String getAcc_trunk() {
        return acc_trunk;
    }

    public String getAcc_thigh() {
        return acc_thigh;
    }

    public String getAcc_ankle() {
        return acc_ankle;
    }

    public String getGyr_fore() {
        return gyr_fore;
    }

    public String getDate() {
        return date;
    }

    public String getPedometer() {
        return pedometer;
    }


    public void setAcc_ankle(String acc_ankle) {

        this.acc_trunk=acc_ankle;
    }

    public void setAcc_thigh(String acc_thigh) {
        this.acc_thigh = acc_thigh;
    }

    public void setAcc_trunk(String acc_trunk) {
        this.acc_trunk = acc_trunk;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public void setGyr_ankle(String gyr_ankle) {
        this.gyr_ankle = gyr_ankle;
    }

    public void setGyr_fore(String gyr_fore) {
        this.gyr_fore = gyr_fore;
    }

    public void setGyr_lateral(String gyr_lateral) {
        this.gyr_lateral = gyr_lateral;
    }

    public void setPedometer(String pedometer) {
        this.pedometer = pedometer;
    }
}