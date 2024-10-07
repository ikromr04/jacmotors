import React from 'react';
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import IndexPage from './pages';

export default function App(): JSX.Element {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/admin" element={<IndexPage />} />
        <Route path="/admin/banners/:banner" element={<IndexPage />} />
      </Routes>
    </BrowserRouter>
  );
}
