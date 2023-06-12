import React from 'react'

const U30_child = React.forwardRef((props, refff) => {

    return (
        <div>
            <input type="text" ref={refff}/>
        </div>
    )
}) 

export default  U30_child

