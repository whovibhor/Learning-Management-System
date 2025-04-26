@extends('layouts.super')

@section('content')
    <!-- System Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <!-- Total Admins -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium text-gray-900">Total Admins</h3>
                    <p class="text-2xl font-semibold text-gray-700">{{ $totalAdmins ?? 0 }}</p>
                </div>
            </div>
        </div>

        <!-- System Health -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium text-gray-900">System Health</h3>
                    <p class="text-2xl font-semibold text-gray-700">98%</p>
                </div>
            </div>
        </div>

        <!-- Active Sessions -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium text-gray-900">Active Sessions</h3>
                    <p class="text-2xl font-semibold text-gray-700">{{ $activeSessions ?? 0 }}</p>
                </div>
            </div>
        </div>

        <!-- Storage Usage -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium text-gray-900">Storage Usage</h3>
                    <p class="text-2xl font-semibold text-gray-700">65%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- System Controls -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">System Controls</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Maintenance Mode</span>
                    <button class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 bg-gray-200" role="switch" aria-checked="false">
                        <span class="sr-only">Use setting</span>
                        <span class="translate-x-0 pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Backup System</span>
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Start Backup
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Clear Cache</span>
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Clear Now
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Security Overview</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Last Security Scan</span>
                    <span class="text-sm text-gray-500">2 hours ago</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Firewall Status</span>
                    <span class="text-sm font-medium text-green-600">Active</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">SSL Certificate</span>
                    <span class="text-sm font-medium text-green-600">Valid</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent System Logs -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Recent System Logs</h3>
            <div class="space-y-4">
                @if(isset($systemLogs) && is_array($systemLogs) && count($systemLogs) > 0)
                    @foreach($systemLogs as $log)
                        @if(is_object($log))
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="p-2 rounded-full {{ isset($log->type) && $log->type === 'error' ? 'bg-red-100' : 'bg-gray-100' }}">
                                    <svg class="w-5 h-5 {{ isset($log->type) && $log->type === 'error' ? 'text-red-600' : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-gray-600">{{ isset($log->message) ? $log->message : 'No message' }}</p>
                                <p class="text-xs text-gray-500">{{ (isset($log->created_at) && method_exists($log->created_at, 'diffForHumans')) ? $log->created_at->diffForHumans() : 'Unknown time' }}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @else
                    <p class="text-gray-500">No recent system logs</p>
                @endif
            </div>
        </div>
    </div>
@endsection
