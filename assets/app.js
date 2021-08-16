import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom';
//import '../css/app.css';
import Home from './components/Home';
import Orders from './components/Orders';
import Inventory from './components/Inventory';

ReactDOM.render(
    <Router>
        <main>
            <nav>
                <ul>
                    <li><Link to="/">Home</Link></li>
                    <li><Link to="/orders">Orders</Link></li>
                    <li><Link to="/inventory">Inventory</Link></li>
                </ul>
            </nav>
            <Route path="/" exact component={Home} />
            <Route path="/orders" component={Orders} />
            <Route path="/inventory" component={Inventory} />
        </main>
    </Router>, document.getElementById('root'));