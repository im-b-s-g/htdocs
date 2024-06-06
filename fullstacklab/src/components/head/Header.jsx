import React from 'react'
import "./head.css"
const Header = ({setName, setCourse, setAge}) => {

  const changeNamehandler = () =>{
    setName("Brahm");
  }

  const changeCoursehandler = () =>{
    setCourse("B.Tech");
  }

  const changeAgehandler = () =>{
    setAge(22);
  }

  return (
    <div className='header-main'>
        <ul>
            <li onClick={changeNamehandler}>Change Name</li>
            <li onClick={changeCoursehandler}>Change Course</li>
            <li onClick={changeAgehandler}>Change Age</li>
        </ul>
    </div>
  )
}

export default Header