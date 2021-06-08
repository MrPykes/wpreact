import React, { Component } from 'react';
import axios from 'axios';

export class Products extends Component {

    state = {
        products: [],
        isLoaded: false
    }

    componentDidMount(){
        // axios.get('http://localhost/wpreact/wp-json/wp/v2/product')
        axios.get('/wp-json/wp/v2/product')
            .then(res => this.setState({
                products: res.data,
                isLoaded: true
            }))
            .catch(err => console.log(err));
    }

    render() {
        const { products , isLoaded} = this.state;
        if (isLoaded) {
            return(
            products.map(product => (<h3>{product.title.rendered}</h3>))
            )
        }
        return (
            <div>
            </div>
        )
    }
}

export default Products
