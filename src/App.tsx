import { FC } from 'react';
import { Routes, Route } from "react-router-dom";

import Header from './components/Header';
import Home from './page/Home';
import Item from './page/Item';

const App: FC = () => {
  return (
    <>
      <Header />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/:id" element={<Item />} />
      </Routes>
    </>
  )
}

export default App;