import React from 'react';

// Configuration for project images
const projects = [
  {
    id: 1,
    title: "إعادة بناء منزل عائلة أحمد",
    location: "غزة - حي الشجاعية",
    image: "/src/assets/img/projects/family-ahmed-rebuild.webp",
    status: "قيد التنفيذ",
    statusColor: "text-green-700 bg-green-100"
  },
  {
    id: 2,
    title: "ترميم مدرسة النور",
    location: "شمال غزة",
    image: "/src/assets/img/projects/school-reconstruction-north.webp",
    status: "مخطط",
    statusColor: "text-blue-700 bg-blue-100"
  },
  {
    id: 3,
    title: "محطة تحلية المياه",
    location: "خانيونس",
    image: "/src/assets/img/projects/khan-younis-water-plant.webp",
    status: "مكتمل",
    statusColor: "text-green-700 bg-green-100"
  },
];

const GazaGallery = () => {
  return (
    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      {projects.map((project) => (
        <div key={project.id} className="group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-neutral-200">
          <div className="relative h-64 overflow-hidden">
            <img
              src={project.image}
              alt={project.title}
              loading="lazy"
              className="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
              onError={(e) => {
                e.target.onerror = null; 
                e.target.src = "https://via.placeholder.com/400x300?text=Project+Image"; // Fallback
              }}
            />
            <div className={`absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold shadow-sm ${project.statusColor}`}>
              {project.status}
            </div>
          </div>
          <div className="p-6">
            <h3 className="font-bold text-lg mb-2 text-gray-800">{project.title}</h3>
            <p className="text-neutral-500 text-sm">{project.location}</p>
          </div>
        </div>
      ))}
    </div>
  );
};

export default GazaGallery;