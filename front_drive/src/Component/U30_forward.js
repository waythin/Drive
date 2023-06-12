import React, { Component } from 'react'
import U30_child from './U30_child'

class U30_forward extends Component {
    constructor(props) {
      super(props)
    
      this.parentRef = React.createRef()
    }
    clickHandler = () => {
        this.parentRef.current.focus()
    }

  render() {
    return (
      <div>

        <U30_child ref={this.parentRef}/>
        <button onClick={this.clickHandler}>Click</button>
      </div>
    )
  }
}

export default U30_forward