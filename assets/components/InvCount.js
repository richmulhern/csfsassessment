import React, {useEffect, useState} from 'react';
import axios from 'axios';

function InvCount() {
    const [invTotal, setInvTotal] = useState(0);

    useEffect(() => {
        axios.get(`http://localhost:8000/api/inventory/total`).then(inv => {
            setInvTotal((inv.data.total).toLocaleString());
        });

        return () => {
            setInvTotal(null);
        }
    }, []);

    return (
        <div>
            <h2>Inventory</h2>
            <span>{invTotal} Items</span>
        </div>
    )
}

export default InvCount;