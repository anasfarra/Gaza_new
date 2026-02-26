import React from 'react';
import GazaGallery from '../components/GazaGallery'; // استدعاء المعرض الذي أنشأناه سابقاً

const HeroSection = () => {
  return (
    <div className="relative h-screen w-full overflow-hidden">
      <video
        autoPlay loop muted playsInline
        className="absolute z-0 w-auto min-w-full min-h-full max-w-none object-cover"
      >
        <source src="/src/assets/img/branding/gaza-hero-video.mp4" type="video/mp4" />
      </video>
      <div className="relative z-10 flex flex-col items-center justify-center h-full bg-black/50 text-white text-center p-4">
        <h1 className="text-4xl md:text-6xl font-bold mb-4">مشروع حصر الأضرار المتكامل</h1>
        <p className="text-lg md:text-2xl max-w-2xl">نعمل على إعادة إعمار قطاع غزة وفق منظمة رقمية دقيقة</p>
        <div className="mt-8 flex gap-4">
           <button className="bg-blue-600 hover:bg-blue-700 px-8 py-3 rounded-lg font-bold transition">دخول المواطنين</button>
           <button className="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-bold transition">دخول المؤسسات</button>
        </div>
      </div>
    </div>
  );
};

const Home = () => {
  return (
    <div>
      <HeroSection /> {/* هنا يظهر الفيديو في أعلى الصفحة */}
      
      <div className="container mx-auto py-16">
        <h2 className="text-3xl font-bold text-center mb-12">أبرز مشاريع إعادة الإعمار</h2>
        <GazaGallery /> {/* هنا يظهر معرض الصور تحت الفيديو */}
      </div>
    </div>
  );
};

export default Home;