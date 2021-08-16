import React, {useEffect, useState} from 'react';
import axios from 'axios';
import InvTable from './InvTable';
import PrevButton from './PrevButton';
import NextButton from './NextButton';

function Inventory() {
    const [inventory, setInventory] = useState([]);
    const [filter, setFilter] = useState('');
    const [page, setPage] = useState(0);

    useEffect(() => {
        getInventory();

        return () => {
            setInventory([]);
            setFilter('');
        }
    }, [page]);

    const handleFilter = (event) => {
        setFilter(event.target.value);
    }

    const getInventory = () => {
        axios.get(`http://localhost:8000/api/inventory/${page}/${filter}`).then(invData => {
            setInventory(invData.data.inventory);
        });
    }

    const nextPage = (e) => {
        setPage(page + 50);
    }

    const prevPage = (e) => {
        setPage(page - 50);
    }

    return (
        <div>
        <h2>Inventory</h2>
        <div id="invTableNav" className="tableNav">
            <PrevButton action={prevPage} title="Prev" page={page} />
            <NextButton action={nextPage} title="Next" />
            <input type="text" value={filter} onChange={handleFilter} /> <button onClick={getInventory}>Filter</button>
        </div>
        <InvTable inventory={inventory}/>
        </div>
    )
}

export default Inventory;