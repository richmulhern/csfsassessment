import React, {useEffect, useState} from 'react';
import OrderRow from './OrderRow';

function OrderTable(props) {
    const orders = props.orders;
    const orderRows = orders.map((order) => {
        return <OrderRow order={order} key={order.id} />
    });

    return (
        <div>
            <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Product</td>
                    <td>Color</td>
                    <td>Size</td>
                    <td>Status</td>
                    <td>Total</td>
                    <td>Transaction ID</td>
                    <td>Shipper</td>
                </tr>
            </thead>
            <tbody>
                {orderRows}
            </tbody>
            </table>
        </div>
    )
}

export default OrderTable;