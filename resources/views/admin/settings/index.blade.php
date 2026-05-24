@extends('admin.layouts.app')

@section('title', $pageTitle ?? 'Settings')
@section('header_title', $pageTitle ?? 'Settings')

@section('content')
    @if(session('success'))
        <div style="background: rgba(13, 148, 136, 0.1); border: 1px solid rgba(13, 148, 136, 0.25); color: var(--accent-teal); padding: 12px 16px; border-radius: 12px; font-size: 14px; margin-bottom: 24px; display: flex; align-items: center; gap: 8px;">
            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2.5" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

         @foreach($groups as $group => $settings)
            <div class="card" style="margin-bottom: 24px;">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                    <h3 class="card-title" style="text-transform: capitalize;">{{ $group }} Settings</h3>
                    @if($group === 'Testimonials Section')
                        <a href="{{ route('admin.testimonials.index') }}" style="background: var(--accent-teal); color: white; padding: 8px 16px; border-radius: 8px; font-size: 12.5px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2.5" fill="none"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            Manage Testimonials List &rarr;
                        </a>
                    @elseif($group === 'Clients & Partners Section')
                        <a href="{{ route('admin.partners.index') }}" style="background: var(--accent-teal); color: white; padding: 8px 16px; border-radius: 8px; font-size: 12.5px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2.5" fill="none"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            Manage Partner Logos &rarr;
                        </a>
                    @elseif($group === 'Services Section')
                        <a href="{{ route('admin.services.index') }}" style="background: var(--accent-teal); color: white; padding: 8px 16px; border-radius: 8px; font-size: 12.5px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2.5" fill="none"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            Manage Services List &rarr;
                        </a>
                    @endif
                </div>
                <div style="padding: 0 24px 24px; display: flex; flex-direction: column; gap: 20px;">
                    @if($group === 'Clients & Partners Section')
                        @php
                            $general = [];
                            $stats = [1 => [], 2 => [], 3 => []];
                            foreach($settings as $setting) {
                                if (str_contains($setting->key, 'stat_1')) {
                                    $stats[1][] = $setting;
                                } elseif (str_contains($setting->key, 'stat_2')) {
                                    $stats[2][] = $setting;
                                } elseif (str_contains($setting->key, 'stat_3')) {
                                    $stats[3][] = $setting;
                                } else {
                                    $general[] = $setting;
                                }
                            }
                        @endphp

                        <!-- General Clients Settings Grid -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($general as $setting)
                                <div style="{{ ($setting->key === 'home_clients_desc' || $setting->key === 'home_clients_subtitle' || $setting->key === 'home_clients_marquee_label') ? 'grid-column: span 2;' : '' }}">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>

                        <!-- Statistics Grid -->
                        <div style="border-top: 1px solid var(--border-glass); padding-top: 24px; margin-top: 8px;">
                            <h4 style="font-size: 13px; font-weight: 700; color: var(--text-white); margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;">Client Statistics Metric Cards</h4>
                            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                                @foreach($stats as $num => $statFields)
                                    <div style="background: rgba(255,255,255,0.015); border: 1px solid var(--border-glass); border-radius: 14px; padding: 18px; display: flex; flex-direction: column; gap: 16px;">
                                        <div style="font-size: 11px; font-weight: 800; color: var(--accent-orange); text-transform: uppercase; letter-spacing: 1px; margin-bottom: -4px;">Metric #{{ $num }}</div>
                                        @foreach($statFields as $setting)
                                            @include('admin.settings.partials.input', ['setting' => $setting])
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @elseif($group === 'Statistics Section')
                        @php
                            $stats = [];
                            foreach($settings as $setting) {
                                preg_match('/stat_(\d+)/', $setting->key, $matches);
                                if (isset($matches[1])) {
                                    $stats[$matches[1]][] = $setting;
                                }
                            }
                            ksort($stats);
                        @endphp
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                            @foreach($stats as $num => $statFields)
                                <div style="background: rgba(255,255,255,0.015); border: 1px solid var(--border-glass); border-radius: 14px; padding: 18px; display: flex; flex-direction: column; gap: 16px;">
                                    <div style="font-size: 11px; font-weight: 800; color: var(--accent-orange); text-transform: uppercase; letter-spacing: 1px; margin-bottom: -4px;">Statistic #{{ $num }}</div>
                                    @foreach($statFields as $setting)
                                        @include('admin.settings.partials.input', ['setting' => $setting])
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Images Grid Section' && request()->routeIs('admin.settings.about'))
                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 20px;">
                            @foreach($settings as $setting)
                                <div style="background: rgba(255,255,255,0.015); border: 1px solid var(--border-glass); border-radius: 14px; padding: 18px;">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Core Values Section' && request()->routeIs('admin.settings.about'))
                        @php
                            $titleSetting = null;
                            $cores = [1 => [], 2 => [], 3 => [], 4 => [], 5 => [], 6 => []];
                            foreach($settings as $setting) {
                                if ($setting->key === 'about_core_title') $titleSetting = $setting;
                                elseif (str_contains($setting->key, 'core_1')) $cores[1][] = $setting;
                                elseif (str_contains($setting->key, 'core_2')) $cores[2][] = $setting;
                                elseif (str_contains($setting->key, 'core_3')) $cores[3][] = $setting;
                                elseif (str_contains($setting->key, 'core_4')) $cores[4][] = $setting;
                                elseif (str_contains($setting->key, 'core_5')) $cores[5][] = $setting;
                                elseif (str_contains($setting->key, 'core_6')) $cores[6][] = $setting;
                            }
                        @endphp
                        @if($titleSetting)
                            <div style="margin-bottom: 24px;">
                                @include('admin.settings.partials.input', ['setting' => $titleSetting])
                            </div>
                        @endif
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                            @foreach($cores as $num => $coreFields)
                                <div style="background: rgba(255,255,255,0.015); border: 1px solid var(--border-glass); border-radius: 14px; padding: 18px; display: flex; flex-direction: column; gap: 16px;">
                                    <div style="font-size: 11px; font-weight: 800; color: var(--accent-orange); text-transform: uppercase; letter-spacing: 1px; margin-bottom: -4px;">Core Value #{{ $num }}</div>
                                    @foreach($coreFields as $setting)
                                        @include('admin.settings.partials.input', ['setting' => $setting])
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Header & Description' && request()->routeIs('admin.settings.about'))
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($settings as $setting)
                                <div style="{{ ($setting->key === 'about_desc') ? 'grid-column: span 2;' : '' }}">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Header & Description Section' && request()->routeIs('admin.settings.experience'))
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($settings as $setting)
                                <div style="{{ ($setting->key === 'exp_desc') ? 'grid-column: span 2;' : '' }}">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Experience Timeline Section' && request()->routeIs('admin.settings.experience'))
                        <div style="background: rgba(13, 148, 136, 0.05); border: 1px dashed var(--accent-teal); border-radius: 12px; padding: 32px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px;">
                            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(13, 148, 136, 0.1); display: flex; align-items: center; justify-content: center; color: var(--accent-teal);">
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: var(--text-white); margin-bottom: 8px;">Experience Timeline Entries</h4>
                                <p style="font-size: 13px; color: var(--text-muted); max-width: 400px; margin: 0 auto; line-height: 1.6;">Manage the list of consulting projects, assessments, and operational improvements shown on the timeline.</p>
                            </div>
                            <a href="{{ route('admin.experiences.index') }}" style="background: var(--accent-teal); color: white; padding: 12px 24px; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; margin-top: 8px; box-shadow: 0 4px 12px rgba(13, 148, 136, 0.2);">
                                Manage Timeline Entries &rarr;
                            </a>
                        </div>
                    @elseif($group === 'Header Section' && request()->routeIs('admin.settings.philosophy'))
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($settings as $setting)
                                <div style="{{ in_array($setting->key, ['phil_intro_card', 'phil_intro_text']) ? 'grid-column: span 2;' : '' }}">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Header Section' && request()->routeIs('admin.settings.services'))
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($settings as $setting)
                                <div style="{{ in_array($setting->key, ['services_hero_description', 'services_banner_image']) ? 'grid-column: span 2;' : '' }}">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Compass Section' && request()->routeIs('admin.settings.philosophy'))
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($settings as $setting)
                                <div style="{{ ($setting->key === 'phil_compass_desc') ? 'grid-column: span 2;' : '' }}">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Slider Section' && request()->routeIs('admin.settings.philosophy'))
                        @foreach($settings as $setting)
                            @include('admin.settings.partials.input', ['setting' => $setting])
                        @endforeach
                    @elseif($group === 'Philosophy Values Section' && request()->routeIs('admin.settings.philosophy'))
                        <div style="background: rgba(234, 88, 12, 0.05); border: 1px dashed var(--accent-orange); border-radius: 12px; padding: 32px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px;">
                            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(234, 88, 12, 0.1); display: flex; align-items: center; justify-content: center; color: var(--accent-orange);">
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: var(--text-white); margin-bottom: 8px;">SWARNADWIPA Values</h4>
                                <p style="font-size: 13px; color: var(--text-muted); max-width: 400px; margin: 0 auto; line-height: 1.6;">Manage the cultural values shown in the compass and slider section (S, W, A, R, N, A, etc).</p>
                            </div>
                            <a href="{{ route('admin.philosophy.index') }}" style="background: var(--accent-orange); color: white; padding: 12px 24px; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; margin-top: 8px; box-shadow: 0 4px 12px rgba(234, 88, 12, 0.2);">
                                Manage Philosophy Values &rarr;
                            </a>
                        </div>
                    @elseif($group === 'Services Section' && request()->routeIs('admin.settings.services'))
                        <div style="background: rgba(234, 88, 12, 0.05); border: 1px dashed var(--accent-orange); border-radius: 12px; padding: 32px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px;">
                            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(234, 88, 12, 0.1); display: flex; align-items: center; justify-content: center; color: var(--accent-orange);">
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: var(--text-white); margin-bottom: 8px;">Individual Services List</h4>
                                <p style="font-size: 13px; color: var(--text-muted); max-width: 400px; margin: 0 auto; line-height: 1.6;">Manage individual service cards, titles, full details, descriptions, icons, images, and custom features.</p>
                            </div>
                            <a href="{{ route('admin.services.index') }}" style="background: var(--accent-orange); color: white; padding: 12px 24px; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; margin-top: 8px; box-shadow: 0 4px 12px rgba(234, 88, 12, 0.2);">
                                Manage Services List &rarr;
                            </a>
                        </div>
                    @elseif($group === 'Training Topics List' && request()->routeIs('admin.settings.training'))
                        <div style="background: rgba(234, 88, 12, 0.05); border: 1px dashed var(--accent-orange); border-radius: 12px; padding: 32px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px;">
                            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(234, 88, 12, 0.1); display: flex; align-items: center; justify-content: center; color: var(--accent-orange);">
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: var(--text-white); margin-bottom: 8px;">Training Topics / Materi</h4>
                                <p style="font-size: 13px; color: var(--text-muted); max-width: 400px; margin: 0 auto; line-height: 1.6;">Tambah, edit, atau hapus topik training yang tampil di grid kartu website.</p>
                            </div>
                            <a href="{{ route('admin.trainings.index') }}" style="background: var(--accent-orange); color: white; padding: 12px 24px; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; margin-top: 8px; box-shadow: 0 4px 12px rgba(234, 88, 12, 0.2);">
                                Manage Training Topics &rarr;
                            </a>
                        </div>
                    @elseif($group === 'Recent Events List' && request()->routeIs('admin.settings.training'))
                        <div style="background: rgba(13, 148, 136, 0.05); border: 1px dashed var(--accent-teal); border-radius: 12px; padding: 32px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px;">
                            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(13, 148, 136, 0.1); display: flex; align-items: center; justify-content: center; color: var(--accent-teal);">
                                <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 16px; font-weight: 700; color: var(--text-white); margin-bottom: 8px;">Recent Workshop Events</h4>
                                <p style="font-size: 13px; color: var(--text-muted); max-width: 400px; margin: 0 auto; line-height: 1.6;">Kelola kartu event workshop yang tampil di bagian "Recent Workshop & Training Recap".</p>
                            </div>
                            <a href="{{ route('admin.training-events.index') }}" style="background: var(--accent-teal); color: white; padding: 12px 24px; border-radius: 8px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; margin-top: 8px; box-shadow: 0 4px 12px rgba(13, 148, 136, 0.2);">
                                Manage Events &rarr;
                            </a>
                        </div>
                    @elseif($group === 'Feature Strip' && request()->routeIs('admin.settings.training'))
                        @php
                            $features = [1 => [], 2 => [], 3 => [], 4 => []];
                            foreach($settings as $setting) {
                                preg_match('/_(\d+)_/', $setting->key, $m);
                                if (isset($m[1]) && isset($features[(int)$m[1]])) {
                                    $features[(int)$m[1]][] = $setting;
                                }
                            }
                        @endphp
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                            @foreach($features as $num => $fields)
                                <div style="background: var(--bg-admin); border: 1px solid var(--border-glass); border-radius: 12px; padding: 16px; display: flex; flex-direction: column; gap: 14px;">
                                    <div style="font-size: 11px; font-weight: 700; color: var(--accent-orange); text-transform: uppercase; letter-spacing: 0.8px;">Feature {{ $num }}</div>
                                    @foreach($fields as $setting)
                                        @include('admin.settings.partials.input', ['setting' => $setting])
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Banner / Hero' && request()->routeIs('admin.settings.training'))
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($settings as $setting)
                                <div style="{{ in_array($setting->key, ['training_hero_description', 'training_banner_image']) ? 'grid-column: span 2;' : '' }}">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Topics Section' && request()->routeIs('admin.settings.training'))
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($settings as $setting)
                                <div style="{{ $setting->key === 'training_topics_subtitle' ? 'grid-column: span 2;' : '' }}">
                                    @include('admin.settings.partials.input', ['setting' => $setting])
                                </div>
                            @endforeach
                        </div>
                    @elseif($group === 'Recent Events Section' && request()->routeIs('admin.settings.training'))
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            @foreach($settings as $setting)
                                @include('admin.settings.partials.input', ['setting' => $setting])
                            @endforeach
                        </div>
                    @else
                        @foreach($settings as $setting)
                            @include('admin.settings.partials.input', ['setting' => $setting])
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach

        <div style="display: flex; justify-content: flex-end; margin-top: 8px;">
            <button type="submit" class="btn-save">Simpan Semua Settings</button>
        </div>
    </form>
@endsection
