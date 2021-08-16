import React, {useEffect, useState} from 'react';
import axios from 'axios';

function SalesStats() {
    const [saleData, setSaleData] = useState({'sum': 0, 'avg': 0});

    useEffect(() => {
        axios.get('http://localhost:8000/api/sales').then(saleData => {
            setSaleData({
                'sum': (saleData.data.sum/100).toLocaleString(),
                'avg': (saleData.data.avg/100).toLocaleString()
            });
        })

        return () => {
            setSaleData({});
        }
    }, []);

    return (
        <div>
            <h2>Sales</h2>
            <div>
                <div>${saleData.sum} Total</div>
                <div>${saleData.avg} Average</div>
            </div>
        </div>
    )
}

export default SalesStats;