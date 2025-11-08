import type { Metadata } from "next";
import { Fira_Code, Inter } from "next/font/google";
import "./globals.css";

const fontSans = Inter({
  variable: "--font-inter",
  subsets: ["latin"],
});

const fontMono = Fira_Code({
  variable: "--font-fira-code",
  subsets: ["latin"],
});

export const metadata: Metadata = {
  title: "Yankee's Portfolio 🗿",
  description: "CEO Jawoo - Brand and UI UX Designer - Developer - DevOps - Project Manager - Challenger - Portfolio",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body
        className={`${fontSans.variable} ${fontMono.variable} antialiased text-[#171717] text-[16px]/[120%]`}
      >
        {children}
      </body>
    </html>
  );
}
