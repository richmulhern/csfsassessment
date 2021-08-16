import React, {useEffect, useState} from 'react';
import InvRow from './InvRow';

function InvTable(props) {
    const inventory = props.inventory;
    const invRows = inventory.map((inv) => {
        return <InvRow inventory={inv} key={inv.id} />
    });

    return (
        <div>
            <table>
            <thead>
                <tr>
                    <td>Product Name</td>
                    <td>SKU</td>
                    <td>Quantity</td>
                    <td>Color</td>
                    <td>Size</td>
                    <td>Price</td>
                    <td>Cost</td>
                </tr>
            </thead>
            <tbody>
                {invRows}
            </tbody>
            </table>
        </div>
    )
}

export default InvTable;