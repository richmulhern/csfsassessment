import React, {useEffect, useState} from 'react';
import axios from 'axios';

function OrderRow(props) {
    const order = props.order;

    return (
        <tr>
            <td>{order.name}</td>
            <td>{order.email}</td>
            <td>{order.productName}</td>
            <td>{order.color}</td>
            <td>{order.size}</td>
            <td>{order.orderStatus}</td>
            <td>${(order.totalCents/100).toLocaleString()}</td>
            <td>{order.transactionId}</td>
            <td>{order.shipperName}</td>
        </tr>
    )
}

export default OrderRow;