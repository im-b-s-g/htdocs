import React, { useState } from 'react'
import Header from './components/head/Header'
import Footer from './components/foot/Footer'
import MainPage from './components/main/MainPage'

const App = () => {
  const[name,setName] = useState("Default");
  const[course,setCourse] = useState("random");
  const[age,setAge] = useState(1); 
  return(
    <div>
      <Header setName = {setName} setCourse = {setCourse} setAge = {setAge} />
      <MainPage name course age/>
      <Footer/>
    </div>
  )
}

export default App