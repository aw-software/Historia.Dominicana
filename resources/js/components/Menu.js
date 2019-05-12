import React from 'react';
import axios from 'axios';

const menu = () => {
    axios.get('/menu')
        .then(response => {
            console.log(response.data);
    });
}

export default menu;