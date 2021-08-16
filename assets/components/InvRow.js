import React, {useEffect, useState} from 'react';

function InvRow(props) {
    const inv = props.inventory;

    return (
        <tr>
            <td>{inv.productName}</td>
            <td>{inv.sku}</td>
            <td>{inv.quantity}</td>
            <td>{inv.color}</td>
            <td>{inv.size}</td>
            <td>${(inv.price/100).toLocaleString()}</td>
            <td>${(inv.cost/100).toLocaleString()}</td>
        </tr>
    )
}

export default InvRow;