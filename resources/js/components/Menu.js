import React from 'react';
import {Component} from 'react-dom';
import axios from 'axios';


class Menu extends Component{

    state = {
        menu: []
    }

    componenDidmount () {
        axios.get('/menu')
            .then(response => {
                this.setState({menu: response.data});
        });
    }

    render() {
        return (
                <ul className="menu">
                    {
                        this.state.menu.map(items => {
                            return <Il>{items.name}</Il>
                        })
                    }
                </ul>
        )
    }
}

export default Menu;