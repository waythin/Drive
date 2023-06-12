import React, { Component } from 'react'
import U29_Refs from './U29_Refs'

class U29_Parent extends Component {
    constructor(props) {
      super(props)
        
      this.parentRef = React.createRef()
  
    }

    handlerFocus = () =>{
        this.parentRef.current.focusInput()
    }
  render() {
    return (
      <div>
        <U29_Refs ref={this.parentRef}/>

        <button onClick={this.handlerFocus}>Click</button>
      </div>
    )
  }
}

export default U29_Parent