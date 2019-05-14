import React, {Component} from 'react';
import axios from 'axios';


class Menu extends Component{

    state = {
        menu: false
    }

    componentDidMount () {
        axios.get('/menu')
            .then(response => {
                console.log(`Esta entrando en la funcion que va al servidor, este el arrar: ${response.data}`)
                this.setState({menu: response.data});
        });
    }

    render() {
        let items = null;
        if(this.state.menu){
            items = (
                this.state.menu.map((items, key) => {
                    return <li className={key == 0 ? "active":""}><a>{items.name}</a></li>
                })
            );
        }else{
            items = <li><a>Not items</a></li>;
        }
        
        return (
                <ul className="menu">
                    {items}
                </ul>
        );
    }
}

export default Menu;