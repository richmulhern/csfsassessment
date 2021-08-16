import React, {useEffect, useState} from 'react';
import PageButton from './PageButton';

const NextButton = ({action, title}) => {
    return (
        <PageButton action={action} title={title} disabled={false} />
    )
}

export default NextButton;