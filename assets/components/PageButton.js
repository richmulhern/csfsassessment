import React from 'react';

const PageButton = ({action, title, disabled}) => {
    return (
        <button onClick={action} disabled={disabled}>{title}</button>
    )
}

export default PageButton;