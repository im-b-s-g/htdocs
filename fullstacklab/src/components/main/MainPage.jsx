import React from 'react'
import "./mains.css"
const MainPage = ({name, course, age}) => {
  return (
    <div className='main-page'>
      <div className="name">
      My name is {name}
      </div>
      <div className="name">
      My course is {course}
      </div>
      <div className="name">
      My age is {age}
      </div>
    </div>
  )
}

export default MainPage
