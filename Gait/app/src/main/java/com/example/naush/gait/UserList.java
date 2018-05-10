package com.example.naush.gait;

import android.app.Activity;
import android.support.annotation.NonNull;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.util.List;

/**
 * Created by NAUSH on 3/24/2018.
 */

public class UserList extends ArrayAdapter<Register_StaticData> {
    private Activity context;
    private List<Register_StaticData> usersList;

    public UserList(Activity context, List<Register_StaticData> usersList)
    {
        super(context, R.layout.list_layout,usersList);

        this.context=context;
        this.usersList=usersList;
    }

    @NonNull
    @Override
    public View getView(int position, View convertView, ViewGroup parent)
    {
        LayoutInflater inflater=context.getLayoutInflater();
        View listViewItem=inflater.inflate(R.layout.list_layout,null,true);
        TextView textviewName=(TextView)listViewItem.findViewById(R.id.textViewName);
        TextView textViewemail=(TextView)listViewItem.findViewById(R.id.textViewEmail);

        Register_StaticData object=usersList.get(position);
       // textviewName.setText(object.getName());
        textViewemail.setText(object.getEmail());

        return listViewItem;



    }

}
