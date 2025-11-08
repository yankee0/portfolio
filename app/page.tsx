import Image from 'next/image'
import logoSVG from "@/public/assets/yankee.svg"
import Me, { SocialMedia } from '@/components/common/Me';
import { TbBrandBehance, TbBrandGithubFilled, TbBrandInstagramFilled, TbBrandLinkedinFilled } from "react-icons/tb"
// import signatureImage from "@/public/assets/signature.png"

export default function page() {

  const socialMedias: SocialMedia[] = [
    {
      imgSrc: "/assets/instagram.png",
      title: "The unfiltered me 🗿 (don’t judge what I post there 😂)",
      socialMediaIcon: <TbBrandInstagramFilled size={24} />,
      username: "@yankeesuprem",
      url: "https://instagram.com/yankeesuprem"
    },
    {
      imgSrc: "/assets/linkedin.png",
      title: "The professional me 😎",
      socialMediaIcon: <TbBrandLinkedinFilled size={24} />,
      username: "elhadji-gorgui-faye",
      url: "https://www.linkedin.com/in/elhadji-gorgui-faye/",
    },
    {
      imgSrc: "/assets/github.png",
      title: "The monster me 👹",
      socialMediaIcon: <TbBrandGithubFilled size={24} />,
      username: "yankee0",
      url: "https://github.com/yankee0",
    },
    {
      imgSrc: "/assets/behance.png",
      title: "The Picasso me 👨🏾‍🎨",
      socialMediaIcon: <TbBrandBehance size={24} />,
      username: "yankeesuprem",
      url: "https://www.behance.net/yankeesuprem",
    }

  ];
  return (
    <div className='min-h-screen flex flex-col items-center justify-center p-6'>
      <div className='grid grid-cols-1 lg:grid-cols-2 gap-10 content-center justify-center w-fit mx-auto my-auto'>
        <div className='w-full max-w-100 space-y-10'>
          <div className='space-y-6'>
            <h1 className='text-[48px]/[100%] font-bold'>Yo!</h1>
            <div className='space-y-4'>
              <p>
                I haven’t finished yet this portfolio (actually, haven’t even started! 😅). Running a business takes most of my time right now but don’t worry, I’m still around 👀
              </p>
              <p>
                In perfect balance between all these me’s<span className='lg:hidden'> bellow</span>, i’m pushing myself, no matter how complex the challenge gets...
              </p>
            </div>
          </div>

          <div className='flex-col gap-4 hidden lg:flex'>
            <div className='flex gap-4'>
              <Image src={logoSVG} alt="Yankee's Logo" />
              <div className='min-h-full w-0.5 bg-[#E8E8E8]'></div>
              <div>
                <span className='text-sm/snug'>
                  CEO Jawoo, Designer, Developer, Project Manager and <strong>Challenger!</strong>
                </span>
              </div>
            </div>
            {/* <Image src={signatureImage} alt="Yankee's Signature" className='w-40' /> */}
          </div>
        </div>
        <div className='w-full max-w-100 space-y-6'>
          {socialMedias.map((socialMedia) => (
            <Me
              key={socialMedia.title}
              {...socialMedia}
            />
          ))}
          <div className='flex-col gap-4 lg:hidden flex pt-10'>
            <div className='flex gap-4'>
              <Image src={logoSVG} alt="Yankee's Logo" />
              <div className='min-h-full w-0.5 bg-[#E8E8E8]'></div>
              <div>
                <span className='text-sm/snug'>
                  CEO Jawoo, Designer, Developer, Project Manager and <strong>Challenger!</strong>
                </span>
              </div>
            </div>
            {/* <Image src={signatureImage} alt="Yankee's Signature" className='w-40' /> */}
          </div>
        </div>
      </div>
    </div>
  )
}
