import React, {Component} from 'react';
import axios from 'axios';


class Menu extends Component{

    state = {
        menu: []
    }

    componentDidMount () {
        axios.get('/menu')
            .then(response => {
                console.log(`Esta entrando en la funcion que va al servidor, este el arrar: ${response.data}`)
                this.setState({menu: response.data});
        });
    }

    render() {
        return (
                <ul className="menu">
                    {
                        this.state.menu.map(items => {
                            <Il>{items.name}</Il>
                        })
                    }
                </ul>
        )
    }
}

export default Menu;