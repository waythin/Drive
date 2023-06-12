import React, { Component } from 'react';



class DemoC extends Component {
  render() {
    return (


      <div >
        {/* button */}
        <div>
          <button className='button-01'>Button-01</button>
        </div>

        <div>
          <button className='button-02'>Button-02</button>
        </div>

        <div>
          <button className='button-03'>Button-03</button>
        </div>

          {/* toggle */}
        
        <div className='ck'>
          <input type="checkbox" />
        </div>

        {/* image */}
        <div className='idiv1' >
          <div className="idiv2">
              <img src="./img/01.jpg" alt="" className='idiv3'/>

                <div className="itext01">
                  <div className="itext02">
                     <p className='text'>rocket</p>
                  </div>
                   
                </div>
          </div>
          
        </div>

        {/* image 2 3  */}

        <div className='i23_div1' >
          <div className="i23_div2">

            <a href="#">
              <img src="./img/02.png" alt="" className='i23_div3'/>

                <div className="i23_text01">
                    <p className='i23_text'>ark</p>
                </div>
            </a>
              
          </div>
          
          <div className="i23_div2">
            <a href="##">
              <img src="./img/03.jpg" alt="" className='i23_div3'/>

                <div className="i23_text01">
                    <p className='i23_text'>jett</p>
                    
                </div>
            </a>
              
          </div>
        </div>
      
{/* input box */}
        <div className="field01">
          <div className="input_type01">
            <input type="text" required="required"/>
            <span>Text_01</span>
          </div>


          <div className="input_type02">
            <input type="text" required="required"/>
            <span>Text_02</span>
          </div>

          <div className="input_type03">
            <input type="text" required="required"/>
            <span>Text_03</span>
          </div>
            
        </div>



        {/* dropdown */}

        <div className="dropdown1">
           <select name="" id="" >
                    <option value="">jett</option>
                    <option value="">raze</option>
                    <option value="">omen</option>
                    <option value="">phonex</option>
           </select>
               
        </div>



        {/* group button  type 01*/}

        <div className="groupBtn1">
              <div className="groupBtn2">
                <button className='groupBtn01'>one</button>
                <button className='groupBtn02'>two</button>
                <button className='groupBtn03'>three</button>
              </div>
        </div>

        {/* group button  type 02*/}

        <div className="gb1">
              <div className="gb2">
                <button className='gb01'>one</button>
                <button className='gb02'>two</button>
                <button className='gb03'>three</button>
              </div>
        </div>

         {/* group button  type 03  */}
         <div className="ggb1">
              <div className="ggb2">
                <button className='ggb01'>one</button>
                <button className='ggb02'>two</button>
                <button className='ggb03'>three</button>
              </div>
        </div>

        <div className="up">
          <div className="high">
             <button>HOME</button>
          </div>
         
        </div>


        {/* check box */}
        {/* <div className="check">
          <input type="checkbox" />
        </div> */}

        
      </div>
    )
  }
}

export default DemoC