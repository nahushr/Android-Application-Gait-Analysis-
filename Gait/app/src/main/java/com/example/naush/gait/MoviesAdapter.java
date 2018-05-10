package com.example.naush.gait;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;
import android.widget.Toast;

import java.util.List;

public class MoviesAdapter extends RecyclerView.Adapter<MoviesAdapter.MyViewHolder> {

    private List<Movie> moviesList;

    public class MyViewHolder extends RecyclerView.ViewHolder {
        public TextView date,acc_ankle,acc_thigh,acc_trunk;
        public TextView gyr_ankle,gyr_fore,gyr_lateral,pedometer;

        public MyViewHolder(View view) {
            super(view);
            date = (TextView) view.findViewById(R.id.date);
            acc_ankle = (TextView) view.findViewById(R.id.acc_ankle);
            acc_thigh = (TextView) view.findViewById(R.id.acc_thigh);
            acc_trunk = (TextView) view.findViewById(R.id.acc_trunk);

            gyr_ankle = (TextView) view.findViewById(R.id.gyr_ankle);
            gyr_fore = (TextView) view.findViewById(R.id.gyr_fore);
            gyr_lateral = (TextView) view.findViewById(R.id.gyr_lateral);

            pedometer = (TextView) view.findViewById(R.id.pedometer);


        }
    }


    public MoviesAdapter(List<Movie> moviesList) {
        this.moviesList = moviesList;
    }

    @Override
    public MyViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        View itemView = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.movie_list_row, parent, false);

        return new MyViewHolder(itemView);
    }

    @Override
    public void onBindViewHolder(MyViewHolder holder, int position) {
        Movie movie = moviesList.get(position);


        Log.d("letsroll3",movie.getDate());
        Log.d("letsroll3",movie.getAcc_ankle());
        Log.d("letsroll3",movie.getAcc_thigh());
        Log.d("letsroll3",movie.getAcc_trunk());
        Log.d("letsroll3",movie.getGyr_ankle());
        Log.d("letsroll3",movie.getGyr_fore());
        Log.d("letsroll3",movie.getGyr_lateral());
        Log.d("letsroll3",movie.getPedometer());

        holder.date.setText(movie.getDate());
        holder.acc_ankle.setText(movie.getAcc_ankle());
        holder.acc_thigh.setText(movie.getAcc_thigh());
        holder.acc_trunk.setText(movie.getAcc_trunk());

        holder.gyr_ankle.setText(movie.getGyr_ankle());
        holder.gyr_fore.setText(movie.getGyr_fore());
        holder.gyr_lateral.setText(movie.getGyr_lateral());

        holder.pedometer.setText(movie.getPedometer());

    }

    @Override
    public int getItemCount() {
        return moviesList.size();
    }
}