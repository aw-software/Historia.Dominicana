import React from 'react';
import axios from 'axios';
const menu = () => {
    axios.get(process.env.MIX_APP_URL)
        .then(response => {
            console.log(response);
    });
}