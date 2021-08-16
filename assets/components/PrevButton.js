import React, {useEffect, useState} from 'react';
import PageButton from './PageButton';

const PrevButton = ({action, title, page}) => {

    const disabled = (page == 0) ? true : false;

    return (
        <PageButton action={action} title={title} disabled={disabled}/>
    )
}

export default PrevButton;