import React, { Component } from 'react'

 class U29_Refs extends Component {

    constructor(props) {
      super(props)
    
      this.inputRef = React.createRef()
    }

    focusInput(){
        this.inputRef.current.focus()
    }

  render() {
    return (
      <div>U29_Refs

        <input type="text" ref={this.inputRef}/>
      </div>
    )
  }
}

export default U29_Refs