import React from "react";
import { Metadata } from "next";
import YourScore from "@/components/Scores";

export const metadata: Metadata = {
  title: "Rewards Page - Play2Help | Play for Free Donation",
  description: "This is built by Moyasi",
};

const RewardsPage = () => {
  return (
    <div className="flex justify-center pb-20 pt-40">
      <YourScore />
    </div>
  );
};

export default RewardsPage;
