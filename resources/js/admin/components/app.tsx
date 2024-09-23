import React from 'react';
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import IndexPage from './pages';

export default function App(): JSX.Element {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/admin" element={<IndexPage />} />
        <Route path="/admin/banners" element={<IndexPage />} />
        <Route path="/admin/banners/home" element={<IndexPage />} />
        <Route path="/admin/banners/service" element={<IndexPage />} />
      </Routes>
    </BrowserRouter>
  );
}

