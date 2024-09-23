import React, { SVGProps } from 'react';

interface IconProps extends SVGProps<SVGSVGElement> { }

export const Icons = {
  anglesLeft: ({ ...attr }: IconProps) => (
    <svg stroke="currentColor" strokeWidth="1" transform="rotate(90)" viewBox="-33 -33 396 396" {...attr}>
      <path d="m304.394 139.394-139.39 139.393L25.607 139.393c-5.857-5.857-15.355-5.858-21.213.001-5.858 5.858-5.858 15.355 0 21.213l150.004 150a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.858-5.858 5.858-15.355 0-21.213-5.857-5.857-15.355-5.858-21.212.001z" />
      <path d="M154.398 190.607a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.858-5.858 5.858-15.355 0-21.213-5.857-5.858-15.355-5.858-21.213 0l-139.39 139.393L25.607 19.393c-5.857-5.858-15.355-5.858-21.213 0-5.858 5.858-5.858 15.355 0 21.213l150.004 150.001z" />
    </svg>
  ),
  menu: ({ ...attr }: IconProps) => (
    <svg fill="none" viewBox="0 0 24 24" {...attr}>
      <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h10M4 18h5" />
    </svg>
  ),
}
