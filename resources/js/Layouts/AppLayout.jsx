import { Link, usePage } from '@inertiajs/react';
import React, { useState, useEffect } from 'react';

export default function AppLayout({ children, title }) {
    const { url } = usePage();
    const [isMobile, setIsMobile] = useState(false);
    const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

    // Detect screen size for responsive layout
    useEffect(() => {
        const handleResize = () => setIsMobile(window.innerWidth < 768);
        handleResize(); // Set initial value
        window.addEventListener('resize', handleResize);
        return () => window.removeEventListener('resize', handleResize);
    }, []);

    const navigation = [
        { name: 'Dashboard', href: '/admin/dashboard', icon: 'dashboard' },
        { name: 'Schedule', href: '/admin/class-schedule', icon: 'calendar_month' },
        { name: 'Members', href: '/admin/member-database', icon: 'group' },
        { name: 'Settings', href: '/admin/studio-settings', icon: 'settings' },
    ];

    const isActive = (href) => url.startsWith(href);

    // Sidebar component
    const Sidebar = () => (
        <aside className="fixed left-0 top-0 h-full w-[280px] bg-inverse-surface border-r border-outline-variant flex flex-col py-lg z-50">
            <div className="px-lg mb-xl">
                <h1 className="font-headline-md text-headline-md text-primary-fixed font-bold tracking-tight">CoreAlign</h1>
                <p className="font-label-caps text-label-caps text-surface-variant uppercase tracking-widest mt-1">Pilates Management</p>
            </div>
            
            <nav className="flex-1 space-y-1">
                {navigation.map((item) => (
                    <Link
                        key={item.name}
                        href={item.href}
                        className={`relative flex items-center gap-3 px-lg py-3 cursor-pointer group transition-colors duration-200 ${
                            isActive(item.href) 
                                ? 'text-white bg-surface-variant/10' 
                                : 'text-surface-variant hover:text-white hover:bg-surface-variant/5'
                        }`}
                    >
                        {isActive(item.href) && <div className="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-8 bg-primary-fixed rounded-r-full"></div>}
                        <span className={`material-symbols-outlined ${isActive(item.href) ? 'text-primary-fixed' : ''}`}>{item.icon}</span>
                        <span className="font-body-md">{item.name}</span>
                    </Link>
                ))}
            </nav>

            <div className="px-lg mt-auto pt-lg border-t border-surface-variant/10">
                <div className="flex items-center gap-3 p-2 rounded-xl bg-surface-variant/5">
                    <div className="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold">
                        A
                    </div>
                    <div className="overflow-hidden">
                        <p className="text-white text-body-sm font-semibold truncate">Alex Studio</p>
                        <p className="text-surface-variant text-[11px] truncate">Admin Account</p>
                    </div>
                </div>
            </div>
        </aside>
    );

    // Mobile Bottom Nav
    const BottomNav = () => (
        <div className="fixed bottom-0 left-0 w-full h-16 bg-surface border-t border-secondary-fixed flex justify-around items-center z-50 px-4">
             {navigation.map((item) => (
                <Link
                    key={item.name}
                    href={item.href}
                    className={`flex flex-col items-center justify-center w-16 h-full ${
                        isActive(item.href) ? 'text-primary' : 'text-on-surface-variant'
                    }`}
                >
                    <span className="material-symbols-outlined mb-1" style={{ fontSize: '24px' }}>
                        {item.icon}
                    </span>
                    <span className="font-label text-[10px]">{item.name}</span>
                </Link>
            ))}
        </div>
    );

    return (
        <div className="bg-background text-on-surface font-body-md min-h-screen">
            {/* Render Sidebar on Desktop */}
            {!isMobile && <Sidebar />}

            {/* Top Navigation Bar */}
            <header className={`fixed top-0 ${!isMobile ? 'left-[280px] w-[calc(100%-280px)]' : 'left-0 w-full'} h-16 bg-surface border-b border-secondary-fixed flex justify-between items-center px-lg z-40`}>
                <div className="flex items-center gap-4">
                    <h2 className="font-headline-sm text-headline-sm text-on-surface">{title}</h2>
                    {!isMobile && (
                        <div className="relative hidden lg:block">
                            <span className="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
                            <input
                                className="pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full text-body-sm w-64 focus:ring-2 focus:ring-primary/20"
                                placeholder="Search members, classes..." type="text" 
                            />
                        </div>
                    )}
                </div>
                <div className="flex items-center gap-md">
                    <button className="w-10 h-10 flex items-center justify-center rounded-full text-on-surface-variant hover:bg-surface-container-low transition-all">
                        <span className="material-symbols-outlined">notifications</span>
                    </button>
                    {!isMobile && (
                        <>
                            <div className="h-8 w-[1px] bg-secondary-fixed mx-2"></div>
                            <div className="flex items-center gap-3">
                                <div className="text-right">
                                    <p className="font-body-sm font-semibold text-on-surface">Studio HQ</p>
                                    <p className="text-[11px] text-on-surface-variant">South Jakarta Branch</p>
                                </div>
                            </div>
                        </>
                    )}
                </div>
            </header>

            {/* Main Content Area */}
            <main className={`pt-16 ${!isMobile ? 'ml-[280px]' : 'mb-16'} min-h-screen`}>
                <div className="p-lg">
                    {children}
                </div>
            </main>

            {/* Render Bottom Nav on Mobile */}
            {isMobile && <BottomNav />}
        </div>
    );
}
