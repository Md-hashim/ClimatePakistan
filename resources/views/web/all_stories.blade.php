<!DOCTYPE html>
<html lang="en">
<head>
    <title> Stories- WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")

<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{ asset("static/web/images/climate.jpg")}}')">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-light">
                        Stories
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="events-div  pt-5 pb-5">
    <div class="container pb-5 pt-md-5 pt-4">


        <div class="row">
            <div class="col-md-12  pb-3 wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                <h2 class=" bottom30 font-normal head-h2">
                    View All <span class="defaultcolor"> Stories </span>

                </h2>
                <p>
            <h3>    Stories Of Hope</h3>

In the face of the daunting challenges posed by climate change, there emerges a compelling narrative of hope—stories of resilience, innovation, and collective determination that inspire optimism for a sustainable future.
Communities around the world are showcasing remarkable resilience in the wake of climate-related adversities. From small villages to bustling urban centres, individuals are coming together to implement grassroots initiatives that build climate resilience. These initiatives range from community-led reforestation projects to the development of sustainable agriculture practices that not only adapt to a changing climate but also mitigate its impacts.
Innovation is proving to be a powerful catalyst in the fight against climate change. Entrepreneurs, scientists, and inventors are channelling their creativity and expertise into groundbreaking solutions. Advancements in renewable energy technologies, such as solar and wind power, are transforming the global energy landscape, offering cleaner alternatives to conventional fossil fuels. Moreover, technological innovations like smart grids, energy-efficient buildings, and electric transportation are ushering in a new era of sustainability.
Stories of hope also emerge from the corporate sector, where businesses are increasingly recognizing the importance of environmental responsibility. Companies are adopting sustainable practices, reducing their carbon footprint, and investing in eco-friendly technologies. The integration of environmental, social, and governance (ESG) principles into business strategies reflects a growing awareness of the interconnectedness between corporate success and environmental stewardship.
International collaborations and global movements further underscore the collective determination to address climate change. The Paris Agreement stands as a testament to the commitment of nations to limit global temperature increases. Youth-led movements, such as Fridays for Future, demonstrate the power of advocacy in mobilizing communities and influencing policy changes.
These stories of hope collectively paint a picture of a world that is not only aware of the challenges posed by climate change but is actively working towards a sustainable and equitable future. By amplifying these narratives, we can inspire positive action and foster a global mindset that embraces the transformative potential of individual and collective efforts in the face of climate adversity.

                </p>
                <h3>Catastrophic Stroies</h3>
<p>Climate change stories are often narratives of vulnerability, loss, and resilience, portraying the human faces behind the statistics and illustrating the devastating impact of a changing climate on individuals, communities, and ecosystems. These stories highlight both the victims of climate-related catastrophes and the urgent need for global action to mitigate further damage.
One poignant aspect of climate stories centres around the concept of climate refugees – individuals forced to flee their homes due to the impacts of climate change. Rising sea levels, extreme weather events, and prolonged droughts can render entire regions uninhabitable, displacing millions of people. The stories of those who lose their homes, livelihoods, and sometimes even their entire communities underscore the human cost of environmental degradation.
Extreme weather events amplify the narrative of climate victims. Hurricanes, floods, wildfires, and other disasters have become more frequent and severe due to climate change. The stories of those caught in the midst of such catastrophes portray the immediate and often long-lasting trauma experienced by survivors. These narratives emphasize the need for effective disaster preparedness, response, and recovery strategies.
Agricultural communities are particularly vulnerable to the impacts of climate change, with shifting weather patterns, unpredictable rainfall, and increased pest pressures affecting crop yields. The stories of farmers facing challenges such as failed harvests, loss of livestock, and increased food insecurity highlight the intimate connection between climate change and global food systems. These narratives call for sustainable agricultural practices and climate-resilient farming strategies.
The narratives also shed light on the disproportionate impacts of climate change on marginalized communities, including indigenous populations. These groups often have a deep connection to their natural surroundings and face unique challenges due to the disruption of ecosystems and traditional ways of life. Climate stories emphasize the importance of recognizing and respecting indigenous knowledge in climate adaptation and mitigation efforts.
However, amidst the narratives of loss and hardship, there are also stories of resilience and adaptation. Communities around the world are developing innovative solutions to cope with a changing climate, from building climate-resilient infrastructure to adopting sustainable practices. These stories inspire hope and underscore the potential for collective action to address the challenges posed by climate change.
The bottom line?
Climate stories humanize the impacts of climate change, making them relatable and compelling. They serve as a powerful tool for raising awareness, fostering empathy, and mobilizing individuals, communities, and policymakers toward meaningful climate action. Ultimately, these stories contribute to a collective narrative that emphasizes the urgency of addressing climate change to protect both the planet and its inhabitants.
</p>
            </div>
        </div>


        <div class="row   wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">

            @foreach($stories as $story)
                <div class="col-lg-6 pb-4 wow fadeIn" data-wow-delay="300ms"
                     style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <div class="bx-inner-div">
                        <div class="row">
                            <div class="col-md-6 background-image1 shadow corner1"
                                 style="background:url('{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $story->images }}')"></div>

                            <div class="col-md-6 bg-white shadow corner2">
                                <div class="p-4">
                                    <h3 class="bottom10 darkcolor font-normal">
                                        <a href="story.html">
                                            {{ $story->name }}
                                        </a>
                                    </h3>
                                    <p class="bottom15">
                                        {{ $story->story }}
                                    </p>

                                    <a href="{{ route("story_details", ["id"=>$story->id]) }}" class="link-read defaultcolor">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

        <div class="row pt-5">
            <div class="col-md-12">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center custom-pagination">

                        {{-- Pagination Links --}}
                        @for ($i = 1; $i <= $stories->lastPage(); $i++)
                            <li class="page-item {{ $i === $stories->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $stories->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</section>


<section class="pb-5">
    <div class="container pt-4">
        <div class="row heading_space">

            <div class="col-md-12">

                <div class=" bg-light heading_space border-11 p-md-5 p-4">
                    <h4 class="text-capitalize  bottom20 pt-md-0 pt-3 head-h3"> Submit Your Story</h4>
                    <form class="reg-form-div">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label> name</label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input class="form-control fm2" type="email">
                                </div>
                            </div>


                            <div class="col-lg-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Company name</label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>


                            <div class="col-lg-12 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>
                                        Submit Story
                                    </label>
                                    <textarea class="form-control min-height-form fm2" rows="4"></textarea>
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-12 mt-3">
                                <button type="submit" class="button gradient-btn">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</section>

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
