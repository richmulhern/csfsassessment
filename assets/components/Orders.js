import React, {useEffect, useState} from 'react';
import axios from 'axios';
import OrderTable from './OrderTable';

function Orders() {
    const [orders, setOrders] = useState([]);

    useEffect(() => {
        axios.get(`http://localhost:8000/api/orders`).then(orderData => {
            setOrders(orderData.data.orders);
        });

        return () => {
            setOrders([]);
        }
    }, []);

    return (
        <div>
        <h2>Orders</h2>
        <OrderTable orders={orders}/>
        </div>
    )
}

export default Orders;