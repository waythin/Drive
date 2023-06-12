import React from 'react'
import ReactDOM  from 'react-dom'

function U31_Portals() 
{

  return ReactDOM.createPortal(
    <h1>U31_Portals</h1>, 
    document.getElementById('portal_root')
  )
}

export default U31_Portals