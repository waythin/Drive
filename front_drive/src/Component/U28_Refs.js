//creating a ref
// fetch the input value
//callback refs

import React, { Component } from 'react'

class U28_Refs extends Component {
    constructor(props) {
      super(props)
    
     this.inputRef = React.createRef()
     
     this.cbRef = null
     this.setCBR = element => {
        this.cbRef = element
     }

    }

   

    componentDidMount(){
        if(this.cbRef){
            this.cbRef.focus()
        }
        // this.inputRef.current.focus()
        // console.log(this.inputRef)
    } 
    
    refhandler = () => {
        alert(`the value is ${this.inputRef.current.value} ${this.cbRef.value} `)
    }

  render() {
    return (

      <div>U28_Refs

        <input type="text" ref={this.inputRef}/>
        <input type="text" ref={this.setCBR}/>
        <button onClick={this.refhandler}> Click</button>
      </div>
    )
  }
}

export default U28_Refs