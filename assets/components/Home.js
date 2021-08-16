import React, {Component} from 'react';
import SalesStats from './SalesStats';
import InvCount from './InvCount';

class Home extends Component {
    render() {
        return (
           <div>
               <SalesStats />
               <InvCount />
           </div>
        )
    }
}

export default Home;