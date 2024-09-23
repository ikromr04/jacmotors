import React from 'react';
import NavItem from './nav-item';
import { Icons } from '@/components/icons';

export default function PageNavigation(): JSX.Element {
  return (
    <nav className="py-4 px-4">
      <ul className="flex flex-col gap-y-1">
        <NavItem
          links={{
            title: 'Баннеры',
            icon: <Icons.banner className="transition-all duration-300" width={24} height={20} />,
            links: [
              {
                href: '/admin/banners/home',
                label: 'Главная страница',
              },
              {
                href: '/admin/banners/service',
                label: 'Услуги и сервис',
              }
            ],
          }}
        />
        <NavItem
          link={{
            href: '/admin/asd',
            label: 'Баннеры',
          }}
        />
        <NavItem
          link={{
            href: '/admin',
            label: 'Баннеры',
          }}
        />
      </ul>
    </nav>
  );
}
