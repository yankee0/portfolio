import Image from 'next/image';
import Link from 'next/link';
import React from 'react'

export type SocialMedia = {
  imgSrc: string;
  title: string;
  socialMediaIcon: React.ReactNode;
  username: string;
  url: string;
}

export default function Me({ imgSrc, title, socialMediaIcon, username, url }: SocialMedia) {
  return (
    <Link href={url} className='flex gap-4 items-center'>
      <Image src={imgSrc} alt={title} height={80} width={80} className='aspect-square h-20 w-20' />
      <div className='space-y-2'>
        <h2 className='font-bold text-[16px]/[120%]'>{title}</h2>
        <div className='flex gap-0 items-center'>
          {socialMediaIcon}
          <span className='text-sm'>{username}</span>
        </div>
      </div>
    </Link>
  )
}
